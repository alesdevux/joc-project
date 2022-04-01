module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        dark: "#1F313F",
        principal: "#61FFFF",
        secundary: "#FFEE54",
        terciary: "#FF61F9"
      },
      fontFamily: {
        pop: ['Poppins']
      },
      fontSize: {
        h2: '27px',
      },
      dropShadow: {
        'consistent':'4px 4px 0 #FF61F9'
      }
    },
  },
  plugins: [],
}
