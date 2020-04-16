module.exports = {
    theme: {
        extend: {
            colors: {},
            textColor: {
                'primary': 'var(--theme-custom-color-primary-text)',
                'primary-body': 'var(--theme-custom-color-primary-body-text)',
                'accent': 'var(--theme-custom-color-accent-text)',
                'footer-header': 'var(--theme-custom-color-footer-header-text)',
                'footer-link': 'var(--theme-custom-color-footer-link-text)',
            },
            backgroundColor: {
                '-primary': 'var(--theme-custom-color-primary)',
                'color-primary-bg': 'var(--theme-custom-color-primary-bg)',
                'color-primary-bg-transparent': 'var(--theme-custom-color-primary-bg-transparent)',
                'color-primary-highlight': 'var(--theme-custom-color-primary-highlight)',
                'color-accent': 'var(--theme-custom-color-accent)',
                'color-accent-hover': 'var(--theme-custom-color-accent-hover)',
                'color-accent-hover-inverse': 'var(--theme-custom-color-accent-hover-inverse)',
                'color-footer-bg': 'var(--theme-custom-color-footer-bg)'
            },
            borderColor: {
                'primary': 'var(--theme-custom-color-primary)',
                'color-primary-bg': 'var(--theme-custom-color-primary-bg)',
                'color-primary-bg-transparent': 'var(--theme-custom-color-primary-bg-transparent)',
                'color-primary-highlight': 'var(--theme-custom-color-primary-highlight)',
                'color-accent': 'var(--theme-custom-color-accent)',
                'color-accent-hover': 'var(--theme-custom-color-accent-hover)',
                'color-accent-hover-inverse': 'var(--theme-custom-color-accent-hover-inverse)',
                'color-border': 'var(--theme-custom-color-border)',
            },
            fontFamily: {
                display: "var(--font-display)",
                body: "var(--font-body)",
            },
            fontWeight: {
                default: "var(--font-weight-default)",
                display: "var(--font-weight-display)",
                btn: "var(--font-weight-btn)",
            },
            borderRadius: {
                none: "0",
                btn: "var(--rounded-btn)",
            },
            spacing: {
                '80': '32rem', // 512px
                '92': '44rem', // 704px
            },
        },
    }
};
