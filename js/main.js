let videoSound = false;
const videoSoundOnIcon = document.querySelector('.videoSection__btn__icon--on');
const videoSoundOffIcon = document.querySelector('.videoSection__btn__icon--off');
const mobileMenu = document.querySelector('.mobileMenu');
const mobileMenuChildren = Array.from(document.querySelectorAll('.mobileMenu>*'));

const toggleVideoSound = () => {
    videoSound = !videoSound;
    if(videoSound) {
        videoSoundOnIcon.style.visibility = 'visible';
        videoSoundOffIcon.style.visibility = 'hidden';
    }
    else {
        videoSoundOnIcon.style.visibility = 'hidden';
        videoSoundOffIcon.style.visibility = 'visible';
    }
}

const openMenu = () => {
    mobileMenu.style.transform = 'scaleX(1)';
    setTimeout(() => {
        mobileMenuChildren.forEach((item) => {
            item.style.opacity = '1';
        });
    }, 200);
}

const closeMenu = () => {
    mobileMenuChildren.forEach((item) => {
        item.style.opacity = '0';
    });
    setTimeout(() => {
        mobileMenu.style.transform = 'scaleX(0)';
    }, 200);
}
