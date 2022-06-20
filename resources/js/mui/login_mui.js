import * as React from 'react'
import ReactDOM from "react-dom";
import {
    Box,
    Button,
    Checkbox,
    Container,
    FormControlLabel,
    Link,
    Paper,
    TextField,
    ThemeProvider,
    Typography
} from "@mui/material";
import {useState} from "react";
import {MaterialAppTheme, pp} from "../theme"
import TextFieldCustom from "../components/widgets/textfield";

function Login(data) {
    const [check, setCheck] = useState(data.checked === 'true');
    return (
        <ThemeProvider theme={MaterialAppTheme}>
            <Box component={"main"} maxWidth={true} sx={{mt: '10%'}}>
                <Container component={"main"} maxWidth={'sm'} sx={{}} disableGutters={true}>
                    <Paper elevation={3}>
                        <Box
                            component={"main"}
                            sx={{
                                display: "flex",
                                flexDirection: "column",
                                p: 5,
                            }}

                        >
                            <Typography component={"h1"} variant={"inherit"} sx={{mb: 2}}> Authetification </Typography>
                            <TextFieldCustom label={'Email'} type={'email'} error={data.error} msg={data.MEM}/>
                            <TextFieldCustom label={'Password'} type={'password'} error={data.error} msg={data.MEP}/>
                            <FormControlLabel control={<Checkbox/>}
                                              checked={check}
                                              onChange={(event => {
                                                  setCheck(!check);
                                              })}
                                              label="Se souvenir de moi"/>
                            <Box
                                sx={{
                                    display: "flex",
                                    flexDirection: "row",
                                    justifyContent: "space-between",
                                    alignItems: "center",
                                    mt: 2
                                }}>
                                <Button variant={"contained"} sx={{}} type={"submit"}>Connexion</Button>
                                <Link href={data.rootForget} variant={'inherit'}>Mot de passe oublier ?</Link>
                            </Box>
                        </Box>

                    </Paper>

                </Container>
            </Box>
        </ThemeProvider>

    );
}

export default Login;

if (document.querySelector("#cnx")) {
    let cnId = document.querySelector("#cnx");
    let root = cnId.dataset.root;
    let error = cnId.dataset.error;
    let messageErrorEmail = cnId.dataset.mem;
    let messageErrorPassword = cnId.dataset.mep;
    let checked = cnId.dataset.checked;
    let rootForget = cnId.dataset.forgetpassword;

    function MainFunction() {
        return (
            <Login
                error={error}
                MEM={messageErrorEmail}
                MEP={messageErrorPassword}
                checked={checked}
                rootForget={rootForget}
            />
        );
    }

    ReactDOM.render(<MainFunction/>, cnId);
}
