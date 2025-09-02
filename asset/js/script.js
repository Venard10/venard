document.getElementById('registration-form').addEventListener('submit', function(e) {
    e.preventDefault();  

    const firstName = document.getElementById('first-name').value;
    const middleName = document.getElementById('middle-name').value;
    const lastName = document.getElementById('last-name').value;
    const email = document.getElementById('email').value;
    const dob = document.getElementById('dob').value;
    const batch = document.getElementById('batch').value;
    const technology = document.getElementById('technology').value;

    console.log('First Name:', firstName);
    console.log('Middle Name:', middleName);
    console.log('Last Name:', lastName);
    console.log('Email:', email);
    console.log('Date of Birth:', dob);
    console.log('Batch:', batch);
    console.log('Technology:', technology);

    if (firstName && middleName && lastName && email && dob && batch && technology) {
        alert('Registration Successful!');
    } else {
        alert('Please fill in all the required fields');
    }
});