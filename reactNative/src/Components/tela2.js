import React from 'react'
import { View, Button } from "react-native";
import {Actions} from 'react-native-router-flux';

function tela2() {
  return (
    <View style={{flex:1,justifyContent:'center'}}>
      <Button
        title="Voltar para cena anterior"
        onPress={() => Actions.cena1() }

      />
    </View>
  )
}

export default tela2
