module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        mobile: {
          yellow: '#fff200',
          black: 'black'
        }
      },
    },
  },
  variants: {
    extend: {
      appearance: ['hover', 'focus'],
    },
  },
  plugins: [],
}
