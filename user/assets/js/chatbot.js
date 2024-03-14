var chatButton = document.getElementById('chatButton');
var modal = document.getElementById('chatModal');
var closeButton = document.getElementsByClassName('close')[0];

chatButton.addEventListener('click', function() {
  modal.style.display = 'block';
});

closeButton.addEventListener('click', function() {
  modal.style.display = 'none';
});

window.addEventListener('click', function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
});

// JavaScript (script.js)
document.addEventListener("DOMContentLoaded", function() {
  // Function to add a message to the chat window
  function addMessage(message, sender) {
      var chatContainer = document.getElementById('chatContainer');
      var messageElement = document.createElement('div');
      messageElement.classList.add(sender === 'user' ? 'user-message' : 'bot-message');
      messageElement.textContent = message;
      chatContainer.appendChild(messageElement);
  }

  // Event listener for user input
  var userInputField = document.getElementById('userInput');
  userInputField.addEventListener('keydown', function(event) {
      if (event.key === 'Enter') {
          var userInput = userInputField.value.trim();
          if (userInput) {
              addMessage(userInput, 'user');
              // Example: Send user input to chatbot and get response
              var chatbotResponse = getChatbotResponse(userInput);
              addMessage(chatbotResponse, 'bot');
              userInputField.value = ''; // Clear the input field
          }
      }
  });

  // Example function to simulate chatbot response
  function getChatbotResponse(userInput) {
      // This is where you would send the user input to your chatbot API
      // and get the response back. For demonstration purposes, I'll
      // just return a static response.
      return "I received your message: " + userInput;
  }
});
