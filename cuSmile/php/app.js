flatpickr("#appointment", {
    altInput: true,
    // to be sent to database
    dateFormat: "M-d-Y h:i K",
    // what users are seeing in the calendar picker
    altFormat: "F j, Y at h:i K",
    defaultDate: "today",
    enableTime: true,
    minTime: "10:00",
});

// function updateSelectedDentist() {
//     let dropDown = document.querySelector('.dropdown-menu')
//     let dentistField = document.querySelector('#selectedDentist')
    
//     let drRaymund = document.querySelector('.1-dentist'); 
//     let drEman = document.querySelector('.2-dentist');
//     let drLance = document.querySelector('.3-dentist');

//     drRaymund.addEventListener('click'), () => {
//         dentistField.setAttribute('value', 'Dr. Raymund');
//         dropDown.classList.add("active");
//     }

//     drEman.addEventListener('click'), () => {
//         dentistField.setAttribute('value', '');
//         dropDown.classList.add("active");
//     }

//     drLance.addEventListener('click'), () => {
//         dentistField.setAttribute('value', 'dentistName');
//         dropDown.classList.add("active");
//     }


// }

updateSelectedDentist();

