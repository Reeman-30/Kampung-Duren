import React from 'react';
import { View, StyleSheet, Image, ImageBackground, Text } from 'react-native';
import Chekin  from '../component/Chekin';
import Infohomestay  from '../component/Infohomestay';

const Home = () => {
  return (
    <View style={styles.container}>
      <View style={[styles.flexItem, { flex: 5 }]}>
        {/* Konten Flex 1 */}
        <ImageBackground
          source={require('../assets/Logokosongan.png')} // Ganti dengan sumber gambar latar belakang yang diinginkan
          style={{ width: 360, height: 200 }}
          resizeMode="contain" // Atur resizeMode menjadi 'contain'
        >
          {/* Tambahkan gambar di atas gambar latar belakang */}
          <Image
            source={require('../assets/Logonama.png')} // Ganti dengan sumber gambar yang ingin ditambahkan di atas gambar latar belakang
            style={styles.overlayImage}
            resizeMode="contain" // Atur resizeMode menjadi 'contain'
          />
          <Image
            source={require('../assets/profile.png')} // Ganti dengan sumber gambar yang ingin ditambahkan di atas gambar latar belakang
            style={styles.overlayImage1}
            resizeMode="contain" // Atur resizeMode menjadi 'contain'
          />
          <Text style={styles.overlayText}>Selamat datang User</Text>
        </ImageBackground>
      </View>
      <View style={[styles.flexItem, { flex: 7}]}>
        {/* Konten Flex 2 */}
        <Chekin/>
      </View>
      <View style={[styles.flexItem, { flex: 10 }]}>
        {/* Konten Flex 3 */}
        <Infohomestay/>

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
    width: '70%',
    height: '30%',
    position: 'absolute',
    top: 25,
    left: 20,
  },
  overlayImage1: {
    width: '70%',
    height: '30%',
    position: 'absolute',
    top: 80,
    left: -70,
  },
  overlayText: {
    position: 'absolute',
    top: 100,
    left: 90,
    color: 'white',
    fontSize: 15,
    fontWeight: 'bold',
  },
});

export default Home;
