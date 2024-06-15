document.addEventListener("DOMContentLoaded", function() {
    const myCourses = JSON.parse(localStorage.getItem('myCourses')) || [];
    const myCoursesContainer = document.getElementById('my-courses');

    myCourses.forEach(courseId => {
        const courseButton = document.getElementById(courseId);
        if (courseButton) {
            myCoursesContainer.appendChild(courseButton);
            courseButton.onclick = null;
            const link = courseButton.querySelector('a');
            link.textContent = 'Изучить дальше';
        }
    });
});

function moveCourse(button) {
    const myCoursesContainer = document.getElementById('my-courses');
    myCoursesContainer.appendChild(button);
    button.onclick = null;
    const link = button.querySelector('a');
    link.textContent = 'Изучить дальше';

    saveCourse(button.id);
}

function saveCourse(courseId) {
    const myCourses = JSON.parse(localStorage.getItem('myCourses')) || [];
    if (!myCourses.includes(courseId)) {
        myCourses.push(courseId);
        localStorage.setItem('myCourses', JSON.stringify(myCourses));
    }
}