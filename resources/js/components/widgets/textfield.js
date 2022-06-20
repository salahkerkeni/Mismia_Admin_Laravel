import {TextField} from "@mui/material";
import * as React from "react";

export default function TextFieldCustom(data) {
    return (
        <TextField
            variant={"outlined"}
            sx={{mb: 2}}
            label={data.label}
            type={data.type}
            name={data.type}
            id={data.type}
            required={true}
            error={data.error === '1'}
            helperText={data.msg}
            margin={"dense"}
        />);
}
