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
      },
      backgroundImage: {
        'logo': "url('https://raw.githubusercontent.com/aleswebgit/joc-project/Guillermo/img/Captura_de_pantalla_de_2022-04-11_10-34-16-removebg-preview(1).png')",
      },
    },
  },
  plugins: [],
}
