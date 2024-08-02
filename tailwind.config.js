/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      screens: {
        '2xl': '1920px',
        'xl' : '1440px',
        'lg' : '1024px',
        'md' : '767px',
        'sm' : '450px',
        'xs' : '375px',
      },
      colors: {
        Primary: '#e0ece9',
        Black: '#000000',
        White: '#ffffff',
        Pink: '#ffa9cd',
        'LightPurple': '#d489f7',
        'DarkPurple': '#6f1bcc',
        'DarkYellow': '#ffd401',
        'LightYellow': '#fff5e1',
        Green: '#00bb4b',
        Error: '#f04438'
      },
      fontSize: {
        xs: '0.75rem',
        sm: '0.875rem',
        base: '1rem',
        lg: ['1.125rem', '24px'],
        xl: '1.5rem',
        '2xl': '2rem',
        '3xl': '2.75rem',
        '4xl': ['4rem','80px']
      },

      fontFamily: {
        'acumin-pro': 'acumin-pro-wide'
      },
      boxShadow: {
        'Button/Focused': '0px 0px 0px 4px rgba(0,0,0,0.25)',
        'Button/Focused Error': '0px 0px 0px 4px rgba(239,60,12,0.25)'
      },
      borderRadius:{
        none: '0',
        xs: '0.3125rem',
        sm: '0.625rem',
        default: '0.7604696154594421rem',
        lg: '0.7619826197624207rem',
        xl: '0.7780808210372925rem',
        '2xl': '58px',
        '3xl': '1.2238425016403198rem',
        '4xl': '1.6017940044403076rem',
        '5xl': '1.6197915077209473rem',
        '6xl': '1.75rem',
        '7xl': '1.8141202926635742rem',
        '8xl': '2rem',
        '9xl': '2.159722328186035rem',
        '10xl': '2.2137153148651123rem',
        '11xl': '2.374363422393799rem',
        '12xl': '2.4010415077209473rem',
        '13xl': '2.5rem',
        '14xl': '2.609375rem',
        '15xl': '3rem',
        '16xl': '3.1675925254821777rem',
        '17xl': '3.2013890743255615rem',
        '18xl': '3.281423568725586rem',
        '19xl': '3.625rem',
        '20xl': '3.9285712242126465rem',
        '21xl': '4.25rem',
        '22xl': '4.695370197296143rem',
        '23xl': '5rem',
        '24xl': '5.5625rem',
        '25xl': '5.625rem',
        full: '9999px'
        }
       },
      },
  plugins: [],
};

export default config;
