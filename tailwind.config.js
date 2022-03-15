module.exports = {
    content: ["./resources/**/*.antlers.html", "./resources/**/*.blade.php"],
    important: true,
    theme: {
        extend: {
            colors: {
                "simple-commerce": "#041B34",
            },
            height: {
                82: "24rem",
            },
            width: {
                "30rem": "30rem",
            },
        },
    },
    plugins: [require("@tailwindcss/typography")],
};
