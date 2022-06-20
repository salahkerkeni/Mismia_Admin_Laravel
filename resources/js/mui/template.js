import * as React from 'react'
import ReactDOM from "react-dom";
import {
    Box,
    Button, Collapse,
    Container, Divider,
    List,
    ListItem, ListItemButton,
    ListItemIcon,
    ListItemText,
    ThemeProvider,
    Typography
} from "@mui/material";
import {MaterialAppTheme, pp} from "../theme";
import {
    AnalyticsOutlined, ArrowForwardIosOutlined,
    AssignmentIndOutlined,
    DashboardOutlined, ExpandLess, ExpandMore, FilterVintageOutlined,
    InboxOutlined,
    Inventory2Outlined,
} from "@mui/icons-material";
import Model from "./Modele/model";
import {map} from "../const";

const template = document.querySelector('#template');

function Item(data) {
    return (<ListItem disablePadding disableGutters={true} onClick={data.onClick != null ? data.onClick : null}>
        <ListItemButton>
            <ListItemIcon>
                {data.icon != null ? data.icon : null}
            </ListItemIcon>
            <ListItemText primary={data.title}
                          primaryTypographyProps={{sx: {fontSize: data.size == null ? '23px' : data.size,}}}/>
            {data.sufixIcon != null ? data.sufixIcon : null}
        </ListItemButton>
    </ListItem>);
}

function Template(data) {
    let Content = (<div>TEST</div>);
    const [open, setOpen] = React.useState(false);

    const handleClick = () => {
        setOpen(!open);
    };

    function getContent(v, k, map) {
        if (k === data.content) {
            Content = v;
        }
    }

    map.forEach(getContent);
    return <ThemeProvider theme={MaterialAppTheme}>
        <Container component={"main"} disableGutters sx={{}} maxWidth={"xl"}>
            <Box component={"div"} height={'100vh'}
                 sx={{display: "flex", flexDirection: "row", flexGrow: 0, flexShrink: 0}}>
                <Box sx={{bgcolor: 'rgba(145,150,134,0.58)', minWidth: 300}}>
                    <List>
                        <ListItem sx={{fontWeight: "bold", fontSize: "large",}}>
                            <ListItemText primary="Tableau de bord"
                                          primaryTypographyProps={{
                                              sx:
                                                  {
                                                      color: "green",
                                                      fontSize: "30px",
                                                      fontWeight: "bold",
                                                  }
                                          }}

                            />
                        </ListItem>
                        <Item icon={<DashboardOutlined/>} title={"Tableau de bord"}/>
                        <Item icon={<Inventory2Outlined/>} title={"Commandes"}/>
                        <Item icon={<AssignmentIndOutlined/>} title={"Clients"}/>
                        <Item icon={<AnalyticsOutlined/>} title={"Rapport"}/>
                        <Item icon={<FilterVintageOutlined/>} title={"Produits"}/>
                        <Divider/>
                        <Item icon={<InboxOutlined/>} title={'Boutique'}
                              sufixIcon={open ? <ExpandLess/> : <ExpandMore/>} onClick={handleClick}/>
                        <Collapse in={open} timeout={"auto"} unmountOnExit>
                            <Item icon={<ArrowForwardIosOutlined/>} title={"Modéle"} size={'20px'}/>
                            <Item icon={<ArrowForwardIosOutlined/>} title={"Categorie"} size={'20px'}/>
                        </Collapse>
                    </List>
                </Box>
                <Box sx={{}} width={'100%'}>
                </Box>
            </Box>
        </Container>
    </ThemeProvider>
}

export default Template;
if (template) {
    ReactDOM.render(<Template/>, template);
}
