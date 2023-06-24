import React from 'react';
import { View, TouchableOpacity, Text, Image, StyleSheet } from 'react-native';

const Chekin = ({ onPress }) => {
  return (
    <View style={styles.container}>
       
      <TouchableOpacity style={styles.button} onPress={onPress}>
        <Image
          source={require('../assets/Durian.png')} // Ganti dengan path gambar yang sesuai
          style={styles.buttonImage}
        />
        <Text style={styles.buttonText}>Check-in</Text>
      </TouchableOpacity>
      
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    alignItems: 'center',
  },
  button: {
    marginTop: -200,
    flexDirection: 'row',
    alignItems: 'center',
    backgroundColor: '#379237',
    paddingHorizontal: 65, // Ubah nilai paddingHorizontal sesuai kebutuhan
    paddingVertical: 2,
    borderRadius: 70,
    shadowColor: 'rgba(0, 0, 0, 0.9)',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 1,
    shadowRadius: 4,
    elevation: 5,
    marginTop:-12,
  },
  buttonImage: {
    width: 80, // Ubah lebar gambar sesuai kebutuhan
    height: 50, // Ubah tinggi gambar sesuai kebutuhan
    
  },
  buttonText: {
    
    color: 'white',
    fontSize: 15,
    fontWeight: 'bold',
  },
});

export default Chekin;
