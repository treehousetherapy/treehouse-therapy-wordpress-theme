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
        // Treehouse Therapy Center - Preview Design System
        'primary-navy': '#1E3A5F',
        'primary-orange': '#E8912D',
        'golden-yellow': '#F5B041',
        'teal-light': '#5DADE2',
        'seafoam-green': '#48C9B0',
        'deep-teal': '#1A5276',
        'tree-brown': '#6E4C1E',
        'cream-bg': '#FAF9F6',
        'text-dark': '#1E3A5F',
        'text-medium': '#4A5568',
        'text-light': '#718096',
      },
      fontFamily: {
        'nunito': ['Nunito', 'sans-serif'],
        'open-sans': ['Open Sans', 'sans-serif'],
      },
      borderRadius: {
        'sm': '8px',
        'base': '12px',
        'lg': '16px',
        'xl': '20px',
        '2xl': '24px',
        '3xl': '32px',
        'pill': '9999px',
      },
      boxShadow: {
        'card': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'card-hover': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        'form': '0 20px 50px -12px rgba(30, 58, 95, 0.15)',
        'button': '0 4px 6px -1px rgba(232, 145, 45, 0.4), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'button-hover': '0 10px 15px -3px rgba(232, 145, 45, 0.5), 0 4px 6px -2px rgba(0, 0, 0, 0.08)',
      },
      animation: {
        'fade-in': 'fadeIn 0.5s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'float': 'float 6s ease-in-out infinite',
        'float-slow': 'floatSlow 8s ease-in-out infinite',
        'float-reverse': 'floatReverse 7s ease-in-out infinite',
        'drift': 'drift 12s ease-in-out infinite',
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
        float: {
          '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
          '50%': { transform: 'translateY(-20px) rotate(3deg)' },
        },
        floatSlow: {
          '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
          '50%': { transform: 'translateY(-15px) rotate(-2deg)' },
        },
        floatReverse: {
          '0%, 100%': { transform: 'translateY(-10px) rotate(-3deg)' },
          '50%': { transform: 'translateY(10px) rotate(3deg)' },
        },
        drift: {
          '0%, 100%': { transform: 'translateX(0) translateY(0)' },
          '25%': { transform: 'translateX(10px) translateY(-5px)' },
          '50%': { transform: 'translateX(0) translateY(-10px)' },
          '75%': { transform: 'translateX(-10px) translateY(-5px)' },
        },
      },
      transitionTimingFunction: {
        'buoyant': 'cubic-bezier(0.16, 1, 0.3, 1)',
      },
    },
  },
  plugins: [],
}
