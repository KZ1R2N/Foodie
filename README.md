# Foodie 🍴 - Review and Social Media Platform for Food Lovers

**Foodie** is a dynamic web application designed to function as a review-based social media platform, specifically focused on restaurant foods in Bangladesh. Users can review posts, like/dislike reviews, follow other users, and explore restaurants using an interactive map. This project integrates HTML, CSS, PHP, and JavaScript to deliver an engaging and feature-rich experience.

---

## 🌟 Features

### 📝 Review and Rating System
- Users can post reviews about any restaurant's food in Bangladesh.
- **Like/Dislike System**: Users can express their opinion by liking or disliking posts.
- **Dynamic State Preservation**: Button states for likes/dislikes & Follow are stored in a XAMPP localhost server, ensuring the state persists across page refreshes.

### 👥 Social Features
- **Follow System**: Users can follow others, and followers are uniquely called "Forkers" in this platform.
- **Forker Management**: Followed users are tracked, and their activity is displayed in the user’s feed.

### 🗺️ Interactive Map
- Integrated **Leaflet Map API** to visualize:
  - Distance between the user and the restaurant.
  - The route and directions to the selected restaurant.

### 🔒 Account Security
- **Forgot Password System**:
  - Implemented an OTP-based password recovery system using **PHPMailer**.

---

## 🛠️ Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: XAMPP (MySQL)
- **API**: Leaflet Map API
- **Email**: PHPMailer for OTP-based password recovery

---

## 🚀 Getting Started

### Prerequisites
1. **XAMPP Server**: Install XAMPP to host the backend locally.
2. **PHP**: Ensure PHP is installed and configured.
3. **Leaflet API**: No extra setup required, but ensure internet access for map rendering.

### Installation
1. Clone this repository:
   ```bash
   git clone https://github.com/KZ1R2N/Foodie.git
   cd foodie
