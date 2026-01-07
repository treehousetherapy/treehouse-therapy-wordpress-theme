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
        'error-red': '#E53E3E',
        'success-green': '#38A169',
      },
      fontFamily: {
        'nunito': ['Nunito', 'sans-serif'],
        'open-sans': ['Open Sans', 'sans-serif'],
      },
      borderRadius: {
        '2xl': '1.5rem',
        '3xl': '2rem',
      },
      boxShadow: {
        'premium': '0 10px 40px -10px rgba(30, 58, 95, 0.2)',
        'premium-lg': '0 20px 60px -15px rgba(30, 58, 95, 0.3)',
      },
      animation: {
        'float': 'float 6s ease-in-out infinite',
        'float-slow': 'float 8s ease-in-out infinite',
        'fade-in': 'fadeIn 0.5s ease-in',
        'slide-up': 'slideUp 0.6s ease-out',
      },
      keyframes: {
        float: {
          '0%, 100%': { transform: 'translateY(0px)' },
          '50%': { transform: 'translateY(-20px)' },
        },
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' },
        },
        slideUp: {
          '0%': { transform: 'translateY(30px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
    },
  },
  plugins: [],
}
