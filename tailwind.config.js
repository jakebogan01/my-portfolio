module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            keyframes: {
                bounceBack: {
                    '0%, 100%': {
                        transform: 'translateY(0)',
                        animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)'
                    },
                    '50%': {
                        transform: 'translateY(-25%)',
                        animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)'
                    },
                },
                showNavIcons: {
                    '0%': {
                        transform: 'scale(0)',
                    },
                    '100%': {
                        transform: 'scale(1)',
                    }
                },
                fullScreenTransition: {
                    '0%': {
                        opacity: '0',
                        visibility: 'hidden',
                    },
                    '25%': {
                        opacity: '0',
                        visibility: 'hidden',
                    },
                    '100%': {
                        opacity: '1',
                        visibility: 'visible',
                    }
                },
                smallScreenTransition: {
                    '0%': {
                        opacity: '0',
                    },
                    '25%': {
                        opacity: '0',
                    },
                    '100%': {
                        opacity: '1',
                    }
                },
                switchIcon: {
                    '0%': {
                        transform: 'scale(1)',
                        opacity: '1'
                    },
                    '25%': {
                        opacity: '1'
                    },
                    '100%': {
                        transform: 'scale(0)',
                        opacity: '0'
                    }
                },
                switchBackIcon: {
                    '0%': {
                        transform: 'scale(0)',
                        opacity: '0'
                    },
                    '25%': {
                        opacity: '1'
                    },
                    '100%': {
                        transform: 'scale(1)',
                        opacity: '1'
                    }
                },
                move2ndBtn: {
                    '0%': {
                        left: '0'
                    },
                    '100%': {
                        left: '60px'
                    }
                },
                move3rdBtn: {
                    '0%': {
                        left: '0'
                    },
                    '100%': {
                        left: '120px'
                    }
                },
                likeBtn: {
                    '0%': {
                        top: '10px',
                        opacity: '0'
                    },
                    '75%': {
                        top: '-07px',
                        opacity: '1'
                    },
                    '100%': {
                        top: '-15px',
                        opacity: '0'
                    }
                },
                move2ndBtnOnMobile: {
                    '0%': {
                        transform: 'translateX(-50%)'
                    },
                    '100%': {
                        transform: 'translateX(-180%)'
                    }
                },
                move3rdBtnOnMobile: {
                    '0%': {
                        transform: 'translateX(-50%)'
                    },
                    '100%': {
                        transform: 'translateX(77%)'
                    }
                },
            },
            animation: {
                bounceBack: 'bounceBack 2s infinite',
                showNavIcons: 'showNavIcons 0.8s forwards cubic-bezier(0.18,0.89,0.32,1.28)',
                fullScreenTransition: 'fullScreenTransition 1.1s forwards',
                smallScreenTransition: 'smallScreenTransition 1.3s forwards',
                switchIcon: 'switchIcon 0.5s forwards cubic-bezier(0.18,0.89,0.32,1.28)',
                switchBackIcon: 'switchBackIcon 0.5s forwards 0.4s cubic-bezier(0.18,0.89,0.32,1.28)',
                move2ndBtn: 'move2ndBtn 0.5s forwards 0.2s cubic-bezier(0.18,0.89,0.32,1.28)',
                move2ndBtnOnMobile: 'move2ndBtnOnMobile 0.5s forwards 0.2s cubic-bezier(0.18,0.89,0.32,1.28)',
                move3rdBtn: 'move3rdBtn 0.5s forwards 0.4s cubic-bezier(0.18,0.89,0.32,1.28)',
                move3rdBtnOnMobile: 'move3rdBtnOnMobile 0.5s forwards 0.4s cubic-bezier(0.18,0.89,0.32,1.28)',
                likeBtn: 'likeBtn 0.6s forwards',
            },
            screens: {
                'xs': '29.6875rem',
                576: '36rem',
                840: '52.5rem',
                992: '62rem',
                1165: '72.8125rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/aspect-ratio'),
    ],
}
