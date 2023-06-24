import React from 'react';
import { View, StyleSheet, Image, ImageBackground, Text } from 'react-native';

const Home = () => {
  return (
    <View style={styles.container}>
      <View style={[styles.flexItem, { flex: 5 }]}>
        {/* Konten Flex 1 */}
        <ImageBackground
          source={require('../assets/motel.jpeg')}
          style={{ width: 360, height: 200 }}
        />
      </View>

      <View style={[styles.flexItem, { flex: 9 }]}>
        {/* Konten Flex 2 */}
        <View style={styles.textContainer}>
          <Text style={[styles.text, { fontWeight: 'bold' }]}>Kampung Durian Homestay</Text>
        </View>
      </View>

      <View style={[styles.flexItem, { flex: 5 }]}>
        {/* Konten Flex 3 */}
       
      </View>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    flexDirection: 'column',
    backgroundColor: 'white',
  },
  flexItem: {
    alignItems: 'center',
    justifyContent: 'center',
  },
  overlayImage: {
    width: 300,
    height: 70,
    position: 'absolute',
    marginTop: 55,
    right: 15,
  },
  textContainer: {
    position: 'absolute',
    top: 10,
    left: 10,
  },
  text: {
    fontSize: 20,
    color: 'black',
    textAlign: 'center',
    marginTop:10,
  },
});

export default Home;
