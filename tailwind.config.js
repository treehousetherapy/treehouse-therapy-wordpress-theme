/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './template-parts/**/*.php',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        // Aviation ABA EXACT color palette (from video analysis)
        'primary-navy': '#1E3A5F',        // Headings, footer bg
        'primary-orange': '#E8912D',      // Buttons, CTAs
        'golden-yellow': '#F5B041',       // Gradient end
        'teal-light': '#5DADE2',          // Sky accents, icons
        'seafoam-green': '#48C9B0',       // Secondary accent
        'deep-teal': '#1A5276',           // Footer gradient
        'cream-bg': '#FAF9F6',            // Off-white background (NOT pure white)
        'white': '#FFFFFF',               // Pure white for cards
        // Text colors
        'text-dark': '#1E3A5F',           // Primary text (matches navy)
        'text-medium': '#5A6672',         // Secondary text
        'text-light': '#8A9AAA',          // Muted text
        // Utility
        'error-red': '#E53E3E',
        'success-green': '#38A169',
        // Legacy aliases (for backward compatibility)
        'dark-navy': '#1E3A5F',
        'tree-brown': '#6E4C1E',
      },
      fontFamily: {
        'nunito': ['Nunito', 'sans-serif'],
        'open-sans': ['Open Sans', 'sans-serif'],
      },
      borderRadius: {
        // Aviation ABA exact radii
        'lg': '12px',                     // Inputs
        'xl': '16px',                     // Small cards
        '2xl': '24px',                    // Cards (large, soft)
        '3xl': '32px',                    // Extra large
        'pill': '9999px',                 // Buttons (full pill)
      },
      boxShadow: {
        // Aviation ABA "Buoyant" shadows
        'soft': '0 4px 20px -4px rgba(0, 0, 0, 0.08)',
        'card': '0 10px 40px -10px rgba(30, 58, 95, 0.1)',           // Card static (blue-tinted)
        'card-hover': '0 20px 60px -15px rgba(30, 58, 95, 0.2)',     // Card hover (lifts)
        'form': '0 20px 50px -12px rgba(30, 58, 95, 0.15)',          // Hero form
        'button': '0 4px 12px rgba(232, 145, 45, 0.3)',              // Orange button glow
      },
      animation: {
        'fade-in': 'fadeIn 0.5s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'float-up': 'floatUp 0.8s cubic-bezier(0.16, 1, 0.3, 1)',    // Buoyant physics
        'float-up-stagger-1': 'floatUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.1s both',
        'float-up-stagger-2': 'floatUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.2s both',
        'float-up-stagger-3': 'floatUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) 0.3s both',
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
        floatUp: {
          '0%': { transform: 'translateY(30px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
      transitionTimingFunction: {
        'buoyant': 'cubic-bezier(0.16, 1, 0.3, 1)',  // Fast start, cushioned finish
      },
    },
  },
  plugins: [],
}
