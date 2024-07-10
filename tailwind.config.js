/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./index.html",
    "./src/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
      color: {
        'myyellow' : "#F9DB03"
      }
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: ["cupcake"],
    theme: {
      extend: {
        colors: {
          yel: "#FFD143",
          org: "#FF9153",
        },
      },
    },
  }
}

