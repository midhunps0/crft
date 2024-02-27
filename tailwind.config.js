/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
     "backgroundImage":{
      "tech":"url('./public/images/lady.png')",
     },
     "colors": {
        "craft-blue": "#0254a5"
     },
     fontFamily: {
        'headings': ['"Franklin Gothic Book"'],
        'body': ['"Century Gothic"',],
        'arial': ['Arial'],
        'nav': ['"Century Gothic"']
      }
    },
  },
  plugins: [],
}

