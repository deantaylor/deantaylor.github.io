var defaultState = true;

//replace this with

// if mouse is over X element > blur text of Y element

/*
document.querySelector('.one').addEventListener('mouseover', function () {

    document.querySelector('.img-text').style.opacity = '0';
});

document.querySelector('.one').addEventListener('mouseout', function () {
    document.querySelector('.img-text').style.opacity = '1';
    console.log("titties test");
});
*/

document.addEventListener('keydown', function () {

    const sectionWhat = document.querySelector('.section-what');

    if (defaultState) {
        defaultState = false;
    } else {
        defaultState = true;
    }

    if (defaultState) {

        sectionWhat.classList.add('test', 'fade');

    } else {

        sectionWhat.classList.remove('test');
    }


});

const menuIcon = document.querySelector('.menu-icon');

menuIcon.addEventListener('click', function () {

    //add what happens when clicked


})



//nav bar
