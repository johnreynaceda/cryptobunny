module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {
      backgroundImage: {
        mainback: "url('/assets/Stock_Chart.svg')",
    },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
