function toggleSections(showId) {
    const sections = [
        'sec-51ac', 'sec-99cd', 'sec-22d2', 'sec-25c5', 'sec-4c0c', 
        'sec-9a65', 'sec-2231', 'sec-10e5', 'sec-009e', 'sec-b0de', 
        'sec-f51f', 'sec-ce2d', 'sec-6fbb'
    ];
    sections.forEach(id => {
        const element = document.getElementById(id);
        if (id === showId) {
            element.classList.add('u-display-block');
            element.classList.remove('u-display-none');
        } else {
            element.classList.add('u-display-none');
            element.classList.remove('u-display-block');
        }
    });
}

function show_sec1() {
    toggleSections('sec-51ac');
}

function show_sec2() {
    toggleSections('sec-99cd');
}

function show_sec3() {
    toggleSections('sec-22d2');
}

function details_sec3() {
    toggleSections('sec-4c0c');
}

function report_sec3() {
    toggleSections('sec-9a65');
}

function show_sec4() {
    toggleSections('sec-2231');
}

function Expenses_sec4() {
    toggleSections('sec-10e5');
}

function show_sec5() {
    toggleSections('sec-009e');
}

function details_sec5() {
    toggleSections('sec-b0de');
}

function show_sec6() {
    toggleSections('sec-f51f');
}

function show_sec7() {
    toggleSections('sec-ce2d');
}

function show_sec8() {
    toggleSections('sec-6fbb');
}