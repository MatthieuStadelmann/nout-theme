// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ["./index.php", "./app/**/*.php", "./resources/**/*.{php,vue,js}"],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
      fontFamily: {
        bold: ['AntarcticaBeta-Medium'],
        sans: ['AntarcticaBeta-Regular'],
      },
    },
  },
  plugins: [],
};
