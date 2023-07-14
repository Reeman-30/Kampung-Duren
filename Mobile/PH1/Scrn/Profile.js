import React from 'react';
import { View, Text, Image, StyleSheet } from 'react-native';

const Profile = () => {
  return (
    <View>
      <Text style={styles.heading}>Profil Saya</Text>
      <Image
        source={require('../assets/Logokosongan.png')} // Ganti dengan sumber gambar yang ingin ditambahkan di atas gambar latar belakang
        style={styles.overlayImage}
      />
      <Text style={styles.label}>Identitas</Text>
      <Text style={styles.info}>Nama: User</Text>
      <Text style={styles.info}>Umur: 25 tahun</Text>
      <Text style={styles.info}>Pekerjaan: Web Developer</Text>
      {/* tambahkan informasi profil lainnya sesuai kebutuhan */}
    </View>
  );
};

const styles = StyleSheet.create({
  heading: {
    fontSize: 24,
    fontWeight: 'bold',
    marginTop: 20,
    marginBottom: 10,
    textAlign: 'center',
  },
  profileImage: {
    width: 200,
    height: 200,
    alignSelf: 'center',
    borderRadius: 100,
    marginBottom: 20,
  },
  label: {
    fontSize: 18,
    fontWeight: 'bold',
    marginTop: 10,
    marginLeft: 20,
  },
  info: {
    fontSize: 16,
    marginLeft: 20,
    marginBottom: 10,
  },
  overlayImage: {
    width: 560,
    height: 300,
    alignSelf: 'center',
    borderRadius: 50,
    marginBottom: 20,
    position: 'absolute',
    top: '50%',
    
    
    transform: [{ translateX: -100 }, { translateY: -100 }],
  },
});

export default Profile;
