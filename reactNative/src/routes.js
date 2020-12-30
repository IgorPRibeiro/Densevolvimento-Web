import React, {Component} from "react";
import { Router, Stack, Scene } from "react-native-router-flux";

import Tela1 from "./Components/tela1";
import Tela2  from "./Components/tela2";

class routes extends Component {
  render() {
    return (
      <Router>
        <Stack key="root" >
          <Scene key="cena1" component={Tela1} hideNavBar={true} />
          <Scene key="cena2" component={Tela2} hideNavBar={true} />
        </Stack>
      </Router>
    );
  }
}

export default routes;
