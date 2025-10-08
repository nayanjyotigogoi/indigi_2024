<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Hiring CTA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <!-- Responsive CTA Bar Styles -->
  <style>
    .fixed-cta-bar {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #004085;
      color: white;
      z-index: 9999;
      padding: 10px 16px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      font-family: sans-serif;
    }

    .cta-content {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 18px;
      font-size: 15px;
      text-align: center;
    }

    .cta-content a,
    .cta-content span {
      display: flex;
      align-items: center;
      gap: 6px;
      color: #ffffff;
      text-decoration: none;
      font-weight: 500;
      white-space: nowrap;
    }

    .cta-content a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .cta-content {
        flex-direction: column;
        gap: 10px;
        font-size: 14px;
      }
    }

    @media (max-width: 480px) {
      .fixed-cta-bar {
        padding: 12px 10px;
      }

      .cta-content {
        font-size: 13px;
        gap: 8px;
      }
    }
  </style>
</head>

<body>

  <div class="fixed-cta-bar">
    <div class="cta-content">
      <span><i class="fas fa-bullhorn"></i> Hiring & HR related queries:</span>
      <a href="tel:+911234567890"><i class="fas fa-phone"></i> +91 12345 67890</a>
      <a href="mailto:hr@example.com"><i class="fas fa-envelope"></i> hr@example.com</a>
      <a href="https://wa.me/911234567890" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a>
    </div>
  </div>

</body>

</html>
