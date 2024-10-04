<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ads Accordion Example</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }

    /* Ads Accordion Container */
    .ads-accordion {
      width: 80%;
      max-width: 600px;
      margin: 20px auto;
    }

    /* Accordion Item */
    .ads-accordion-item {
      border: 1px solid #ddd;
      margin-bottom: 10px;
      border-radius: 5px;
    }

    /* Accordion Header */
    .ads-accordion-header {
      background-color: #f1f1f1;
      padding: 15px;
      cursor: pointer;
      font-weight: bold;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Hover effect for accordion header */
    .ads-accordion-header:hover {
      background-color: #e1e1e1;
    }

    /* Accordion Content (Initially hidden) */
    .ads-accordion-content {
      max-height: 0;
      overflow: hidden;
      padding: 0 15px;
      transition: max-height 0.3s ease, padding 0.3s ease;
      background-color: #fff;
    }

    .ads-accordion-content p {
      margin: 10px 0;
    }

    /* When accordion is active, show content */
    .active .ads-accordion-content {
      padding: 15px;
      max-height: 200px; /* Adjust based on content height */
    }

    /* Icons for open/close */
    .ads-accordion-header:after {
      content: '+';
      font-size: 20px;
    }

    .active .ads-accordion-header:after {
      content: '-';
    }
  </style>
</head>
<body>

  <div class="ads-accordion">
    <div class="ads-accordion-item">
      <div class="ads-accordion-header">How is this working?</div>
      <div class="ads-accordion-content">
        <p>This is working on click. When you click, the answer will expand smoothly with a transition effect.</p>
      </div>
    </div>

    <div class="ads-accordion-item">
      <div class="ads-accordion-header">How to add transitions?</div>
      <div class="ads-accordion-content">
        <p>You can use CSS transitions to add smooth animations when expanding or collapsing content in an accordion.</p>
      </div>
    </div>

    <div class="ads-accordion-item">
      <div class="ads-accordion-header">How does JavaScript help?</div>
      <div class="ads-accordion-content">
        <p>JavaScript is used to toggle the 'active' class, which controls whether the accordion content is visible or hidden.</p>
      </div>
    </div>
  </div>

  <script>
    // Select all accordion items
    const accordionItems = document.querySelectorAll('.ads-accordion-item');

    accordionItems.forEach(item => {
      const header = item.querySelector('.ads-accordion-header');
      
      header.addEventListener('click', () => {
        // Close all other accordion items
        accordionItems.forEach(i => {
          if (i !== item) i.classList.remove('active');
        });

        // Toggle active class on the clicked item
        item.classList.toggle('active');
      });
    });
  </script>
</body>
</html>
