/* Scroll up */
window.onscroll = () => {
    if(window.scrollY > 950){
        document.querySelector('#arrowUp').classList.remove('ShowScrollUp_hide');
    }

    else {
        document.querySelector('#arrowUp').classList.add('ShowScrollUp_hide');
    }
};

