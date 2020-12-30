import React from 'react'
import { View, Button } from "react-native";
import {Actions} from 'react-native-router-flux';


function tela1() {
  return (
    <View style={{flex:1,justifyContent:'center'}}>
      <Button
        title="ir para próxima cena"
        onPress={() => Actions.cena2() }
      />
    </View>
  )
}

export default tela1
