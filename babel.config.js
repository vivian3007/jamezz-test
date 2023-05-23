// module.exports = {
//     presets: [
//         "@babel/preset-env",
//         "@babel/preset-react"
//     ],
// };


require("@babel/core").transformSync("code", {
    plugins: ["@babel/plugin-syntax-jsx"],
});
