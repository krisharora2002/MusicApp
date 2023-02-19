// Function to open the popup form
function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  // Function to close the popup form
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  
  // Function to handle form submission
  function submitForm() {
    // Get values from form inputs
    var name = document.getElementsByName("name")[0].value;
    var email = document.getElementsByName("email")[0].value;
    var phone = document.getElementsByName("phone")[0].value;
  
    // Do something with the form data (e.g. send it to a server)
    console.log("Name: " + name + ", Email: " + email + ", Phone: " + phone);
  
    // Close the popup form
    closeForm();
  }
  
  // Add event listener to the form submission button
  document.querySelector(".form-container").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent default form submission behavior
    submitForm();
  });
  