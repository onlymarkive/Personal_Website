# MAWEECORE 2023 - Personal Portfolio Website

A vibrant and interactive personal portfolio website showcasing the journey of Marielle J. Rectin, a first-year Computer Science student at Batangas State University - The National Engineering University.

## 🌟 Features

- **Responsive Design**: Fully responsive layout that works seamlessly across all devices
- **Interactive Sections**: Multiple engaging sections including Home, About, Gallery, Interests, and Contact
- **Audio Integration**: Built-in music player with gramophone animation
- **Image Gallery**: Interactive carousel showcasing personal photos
- **Social Links**: Direct links to social media profiles
- **Smooth Animations**: Scroll-reveal animations and hover effects
- **Gradient Backgrounds**: Beautiful gradient background images throughout the site

## 🎨 Design Highlights

- **Color Scheme**: Yellow-themed design reflecting personal preferences
- **Typography**: Modern Jost font family for clean, readable text
- **Layout**: Grid-based layouts with responsive breakpoints
- **Visual Effects**: 3D transforms, hover animations, and smooth transitions
- **Background Images**: Custom gradient backgrounds for visual appeal

## 🚀 Technology Stack

- **Backend**: Laravel 11 (PHP Framework)
- **Frontend**: HTML5, CSS3, JavaScript (Vanilla)
- **Styling**: Custom CSS with responsive design
- **Icons**: Boxicons and Font Awesome
- **Fonts**: Google Fonts (Jost family)
- **Animations**: ScrollReveal.js
- **Audio**: HTML5 Audio API

## 📁 Project Structure

```
├── app/
│   └── Http/Controllers/          # Laravel Controllers
├── resources/
│   ├── css/                      # Laravel CSS (Tailwind)
│   ├── views/                    # Blade Templates
│   │   ├── layouts/              # Main layout
│   │   └── welcome.blade.php    # Homepage content
│   └── js/                       # JavaScript files
├── public/
│   ├── assets/                   # Images, audio, and media files
│   ├── css/style.css             # Main stylesheet
│   └── js/app.js                 # Frontend JavaScript
└── routes/                       # Laravel routing
```

## 🎵 Interactive Features

### Music Player
- Custom gramophone player design
- Hover effects with grayscale to color transition
- Background music integration

### Image Gallery
- Smooth carousel functionality
- Drag-to-scroll support
- Responsive image grid

### Contact Form
- Functional email input field
- Social media integration
- Downloadable CV feature

## 📱 Responsive Breakpoints

- **Desktop**: Full grid layouts with hover effects
- **Tablet**: Adjusted spacing and font sizes
- **Mobile**: Single-column layouts with hamburger menu

## 🛠 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/onlymarkive/Personal_Website.git
   cd Personal_Website
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Start the development server**
   ```bash
   php artisan serve
   ```

5. **Build assets** (if using Vite)
   ```bash
   npm run dev
   ```

## 🎯 Sections Overview

### 🏠 Home
- Personal introduction and greeting
- Profile picture with hover effects
- Social media links
- Navigation to other sections

### 🎵 Sub-Service (Music Section)
- Interactive gramophone player
- Background music integration
- Personal interests showcase

### 👤 About
- Detailed personal information
- Middle child theme
- Yellow color preference explanation
- Music enthusiasm

### 🖼️ Gallery
- 2023 photo dump collection
- Interactive image carousel
- Smooth scrolling navigation

### 💼 Portfolio (Interests)
- Six interest categories
- Hover animations and effects
- Detailed descriptions

### 🎯 CTA (Fun Facts)
- Personal statistics
- Interactive hover effects
- Unique revelations

### 📧 Contact
- Email contact form
- Social media integration
- Footer information

## 🎨 Customization

### Colors
- **Primary**: Orange (#ffa500)
- **Background**: White (#ffffff)
- **Text**: Black (#000000)
- **Secondary**: Gray (#444)

### Fonts
- **Primary**: Jost (Google Fonts)
- **Weights**: 100-900 available

### Animations
- Scroll-reveal effects
- Hover transformations
- Smooth transitions (0.3s-0.5s)

## 📊 Browser Support

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## 🤝 Contributing

This is a personal portfolio project. For suggestions or improvements, please reach out through the contact information provided in the website.

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Author

**Marielle J. Rectin**
- First-year Computer Science Student
- Batangas State University - The National Engineering University
- Alangilan Campus

---

*"Navigating the complexities of Computer Science, one line of code at a time."*
