module.exports = {
    purge: {
        enabled: true,
        content: ['./src/**/*.html'],
    },
    // ...
    theme: {
        extend: {
            width: {
                '96': '24rem',
            }
        },
        theme: { // defaults to these values
            spinner: (theme) => ({
                default: {
                    color: 'white', // color you want to make the spinner
                    size: '1em', // size of the spinner (used for both width and height)
                    border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
                    speed: '500ms', // the speed at which the spinner should rotate
                },
            }),
        },
    },
    variants: {},
    plugins: [
        require('tailwindcss-spinner')(),
    ],
    options: {
        whitelist: ['bg-red-500', 'px-4'],
    }
}
