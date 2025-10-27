// Minimal JS for interactions
document.addEventListener('DOMContentLoaded',()=>{
  const typingEl=document.querySelector('.typing-animation');
  if(typingEl){const phrases=['Strategic Business Consultant','AI Innovation Expert','Cybersecurity Specialist','Business Intelligence Leader'];let i=0;setInterval(()=>{typingEl.textContent=phrases[i%phrases.length];i++;},2200);}  
});
