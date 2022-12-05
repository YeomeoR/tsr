/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
  theme: {
    container: {
      center: true,
      padding: '2rem'
    },
    fontSize: {
      'xl': ['2.25rem', {
        lineHeight: '2.75rem',
        color: 'text-pink-500'
      }],
    }
  },
  plugins: [],
};
