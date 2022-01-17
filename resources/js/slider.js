const carouselSlide = document.querySelector('.slider-slide');
const carouselArticles = document.querySelectorAll('.slider-item');

const leftArrow = document.querySelector('.lava');
const rightArrow = document.querySelector('.prava');

let counter = 0;
let numberOfItem = 0;
if(carouselArticles[0] != undefined){
    const size = carouselArticles[0].clientWidth + 20;
    console.log(size);

    carouselArticles.forEach(element => {
        numberOfItem++;
    });
    
    console.log(numberOfItem);
    
    
    rightArrow.addEventListener('click',()=>{
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter++;
        console.log(counter);
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    });
    
    leftArrow.addEventListener('click',()=>{
        carouselSlide.style.transition = "transform 0.4s ease-in-out";
        counter--;
        console.log(counter);
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        
    });
    
    carouselSlide.addEventListener('transitionend', ()=>{
        if(counter + 3 > numberOfItem){
            counter = numberOfItem - 3;
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }
    
        if(counter < 0){
            counter = 0;
            carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
        }
    });
}

