


window.onload=function(){
  
    const container = document.querySelector(".container-main");
    
  
document.querySelector(".open-the-navbar").addEventListener("click", () => {
    
    
  container.classList.add("change");
    
    
});
    

document.querySelector(".close-the-navbar").addEventListener("click", () => {
    
  container.classList.remove("change");
    
});

const colours = ["blue", "green", "red", "pink", "orange"];
    

let i = 0;

Array.from(document.querySelectorAll(".navigation-link")).forEach(item => {
    
  item.style.cssText = `background-color: ${colours[i++]}`;
    
});

Array.from(document.querySelectorAll(".navigation-button")).forEach(item => {
    
  item.onclick = () => {
    item.parentElement.parentElement.classList.toggle("change");
      
  };
    
});
  
  
}

