// Tailwind config.js
module.exports = {
  content: ['./**/*.php', './*php'],
    theme: {
      extend: {
        fontSize: {
          '4.5xl': '2.75rem'
        },
        colors: {
          lightBlack: "rgba(0, 0, 0, 0.2)",
          mediumSpringGreen: "#00fb92"
        },
        borderWidth: {
          '3': '3px',
        },
        fontFamily: {
          neue: ['Helvetica Neue', 'sans-serif'],
          helvetica: ['Helvetica'],
          roboto: ['Roboto', 'sans-serif'],
        }
      }
    },
    variants: {},
    plugins: [

    ]
}