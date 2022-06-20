import {createTheme} from "@mui/material";

export const MaterialAppTheme = createTheme({
    palette: {
        primary: {
            main: '#e8c3c1',
        },
    },
    typography: {},
    components: {
        MuiTypography: {
            styleOverrides: {
                body1: {
                    fontWeight: "bold"
                }
            }
        }
    },

});

export function pp(m) {
    console.log(m);
}
