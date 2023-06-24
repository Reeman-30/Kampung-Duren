import React from 'react';
import { View, Image, TouchableOpacity, StyleSheet, Text } from 'react-native';
import { useNavigation } from '@react-navigation/native';

const Infohomestay = () => {
  const navigation = useNavigation();

  const handlePress = () => {
    navigation.navigate('Tentang'); // Ganti dengan nama halaman tentang yang sesuai
  };

  return (
    <View style={styles.container}>
      <View style={styles.rowContainer}>
        <Image
          source={require('../assets/vekalender.png')} // Ganti dengan path gambar yang sesuai
          resizeMode="contain" // Menggunakan resizeMode untuk menghindari pemotongan gambar
          style={styles.smallImage} // Menggunakan style untuk gambar kecil
        />
        <Text style={styles.text}>Informasi</Text>
      </View>
      <TouchableOpacity onPress={handlePress}>
        <Image
          source={require('../assets/motel.jpeg')} // Ganti dengan path gambar yang sesuai
          style={styles.image} // Menggunakan style yang terpisah
        />
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  rowContainer: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 10,
  },
  smallImage: {
    width: 30,
    height: 30,
    marginRight: 10,
  },
  image: {
    width: 300, // Atur lebar gambar sesuai kebutuhan
    height: 150, // Atur tinggi gambar sesuai kebutuhan
    borderRadius: 20, // Tambahkan border radius sesuai kebutuhan
  },
  text: {
    fontWeight: 'bold',
    fontSize: 20,
  },
});

export default Infohomestay;
