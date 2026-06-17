document.addEventListener('DOMContentLoaded', function () {
  const chatbox = document.querySelector(".chatbox");
  const chatbotContainer = document.querySelector(".show-chatbot .chatbot");
  const chatbotToggler = document.querySelector(".chatbot-toggler");
  const faqList = document.querySelector(".faq-list ul");

  // Frequently asked questions and answers
  const frequentlyAskedQuestions = {
      "q1": "To book a spa service, visit our website and navigate to the 'Book Now' section. You must register and log in first before booking our services. Alternatively, you can call our spa reception to schedule an appointment.",
      "q2": "We offer a variety of spa services, including massages, facials, body treatments, and more. You can find detailed information about each service on our website or inquire with our staff for personalized recommendations.",
      "q3": "Yes, you can cancel or reschedule your appointment. We kindly ask for at least 24 hours' notice to avoid any cancellation fees. Feel free to contact our spa reception for assistance with changes to your booking or to cancel it immediately."
  };

  chatbotToggler.addEventListener("click", function () {
      chatbotContainer.classList.toggle("hidden");
  });

  const createChatLi = (message, className) => {
      const chatLi = document.createElement("li");
      chatLi.classList.add("chat", className);
      let chatContent = className === "outgoing" ? `<p>${message}</p>` : `<span class="material-symbols-outlined">support_agent</span><p>${message}</p>`;
      chatLi.innerHTML = chatContent;
      return chatLi;
  }

  // Handle FAQ click
  const handleFaqClick = (event) => {
      const questionId = event.target.getAttribute("data-question");
      if (questionId && frequentlyAskedQuestions[questionId]) {
          const answer = frequentlyAskedQuestions[questionId];
          // Append the question
          chatbox.appendChild(createChatLi(event.target.innerText, "outgoing"));
          // Append the answer
          setTimeout(() => {
              chatbox.appendChild(createChatLi(answer, "incoming"));
              chatbox.scrollTop = chatbox.scrollHeight; // Scroll to bottom
          }, 300);
      }
  }

  // Add event listeners to FAQ items
  faqList.addEventListener("click", handleFaqClick);
});
