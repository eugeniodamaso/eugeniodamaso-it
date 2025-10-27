<?php
// Utility Functions - Eugenio Damaso Website

function truncateText($text, $length = 160) {
    $text = strip_tags($text);
    if (mb_strlen($text) <= $length) return $text;
    return mb_substr($text, 0, $length) . '...';
}

function formatDate($dateStr) {
    $timestamp = strtotime($dateStr);
    return date('d/m/Y', $timestamp);
}

function estimateReadTime($html) {
    $text = strip_tags($html);
    $words = str_word_count($text);
    return max(1, ceil($words / 200)); // 200 wpm
}

function getLatestBlogPosts($limit = 3) {
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT id, title, slug, excerpt, content, image, category, created_at FROM posts WHERE status = 'published' ORDER BY created_at DESC LIMIT :limit");
        $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        error_log('Failed to fetch latest posts: ' . $e->getMessage());
        return [];
    }
}
?>