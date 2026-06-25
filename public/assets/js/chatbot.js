document.addEventListener("DOMContentLoaded", function () {
  const chatbox = document.querySelector(".chatbox");
  // Inayos ang mga selectors para tumugma sa bagong HTML classes natin
  const chatbotContainer = document.querySelector(".chatbot-popup");
  const chatbotToggler = document.querySelector(".chatbot-btn");
  const faqList = document.querySelector(".faq-list .list-group");

  // Frequently asked questions and answers
  const frequentlyAskedQuestions = {
    q1: "To book a spa service, visit our website and navigate to the 'Book Now' section. You must register and log in first before booking our services. Alternatively, you can call our spa reception to schedule an appointment.",
    q2: "We offer a variety of spa services, including massages, facials, body treatments, and more. You can find detailed information about each service on our website or inquire with our staff for personalized recommendations.",
    q3: "Yes, you can cancel or reschedule your appointment. We kindly ask for at least 24 hours' notice to avoid any cancellation fees. Feel free to contact our spa reception for assistance with changes to your booking or to cancel it immediately.",
  };

  // Toggle button click logit
  if (chatbotToggler && chatbotContainer) {
    chatbotToggler.addEventListener("click", function () {
      chatbotContainer.classList.toggle("hidden");
    });
  }

  // Ginawang Font Awesome ang bot icon dito sa loob ng list item creation
  const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add(
      "chat",
      className,
      "mb-2",
      "d-flex",
      "align-items-start",
    );

    let chatContent =
      className === "outgoing"
        ? `<div class="bg-primary text-white p-2 rounded ms-auto small" style="max-width: 80%;">${message}</div>`
        : `<div class="bg-secondary text-white rounded-circle p-2 me-2 d-flex align-items-center justify-content-center" style="width: 30px; height: 30px; min-width: 30px;"><i class="fa-solid fa-headset" style="font-size: 12px;"></i></div>
             <div class="bg-white p-2 rounded shadow-sm small" style="max-width: 80%;">${message}</div>`;

    chatLi.innerHTML = chatContent;
    return chatLi;
  };

  // Handle FAQ click
  const handleFaqClick = (event) => {
    // Siguraduhing button ang na-click (kahit sa text o icon ka tumama)
    const button = event.target.closest("button");
    if (!button) return;

    const questionId = button.getAttribute("data-question");
    if (questionId && frequentlyAskedQuestions[questionId]) {
      const answer = frequentlyAskedQuestions[questionId];

      // I-append ang tanong ng user
      chatbox.appendChild(createChatLi(button.innerText, "outgoing"));

      // I-append ang sagot ng chatbot pagkatapos ng maikling delay
      setTimeout(() => {
        chatbox.appendChild(createChatLi(answer, "incoming"));

        // Awtomatikong mag-scroll pababa sa chat body ng card natin
        const chatBody = document.querySelector(".chatbot-body");
        if (chatBody) {
          chatBody.scrollTop = chatBody.scrollHeight;
        }
      }, 300);
    }
  };

  // Lagyan ng listener ang FAQ area natin
  if (faqList) {
    faqList.addEventListener("click", handleFaqClick);
  }
});
