/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {},
    colors: {
      "theme-clr-primary": 'hsl(var(--theme-clr-primary) / <alpha-value>)',
      "on-theme-clr-primary": 'hsl(var(--on-theme-clr-primary) / <alpha-value>)',
      "theme-clr-secondary": 'hsl(var(--theme-clr-secondary) / <alpha-value>)',
      "on-theme-clr-secondary": 'hsl(var(--on-theme-clr-secondary) / <alpha-value>)',
      "theme-clr-light": 'hsl(var(--theme-clr-light) / <alpha-value>)',
      "on-theme-clr-light": 'hsl(var(--on-theme-clr-light) / <alpha-value>)',
      "theme-clr-light-100": 'hsl(var(--theme-clr-light-100) / <alpha-value>)',
      "on-theme-clr-light-100": 'hsl(var(--on-theme-clr-light-100) / <alpha-value>)',
      "theme-clr-light-700": 'hsl(var(--theme-clr-light-700) / <alpha-value>)',
    }
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

