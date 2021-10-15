module.exports = {
    purge: {
        content: [
            "./resources/**/*.antlers.html",
            "./resources/**/*.blade.php",
            "./content/**/*.md"
        ]
    },
    important: true,
    theme: {
        extend: {
            height: {
                82: "24rem"
            }
        }
    },
    variants: {},
    plugins: []
};
