import React, { Component } from 'react';
import { View, StyleSheet, TouchableOpacity, Text, Dimensions } from 'react-native';
import { Camera } from 'expo-camera';
import * as ImagePicker from 'expo-image-picker';
import HeadProf from '../Component/HeadProf';

class Profile extends Component {
  openCamera = async () => {
    const { status } = await Camera.requestCameraPermissionsAsync();
    if (status === 'granted') {
      const image = await ImagePicker.launchCameraAsync({
        mediaTypes: ImagePicker.MediaTypeOptions.Images,
        quality: 1,
        allowsEditing: false,
        aspect: [4, 3],
      });

      if (!image.cancelled) {
        console.log('Image URI:', image.uri);
        // Lakukan operasi dengan gambar sesuai kebutuhan Anda
      }
    } else {
      console.log('Camera permission denied');
    }
  };

  render() {
    return (
      <View style={styles.container}>
        <View style={styles.flex1}>
          <HeadProf />
        </View>
        <View style={styles.flex2}>
          <View style={styles.buttonContainer}>
            <Text style={styles.identityText}>Identity</Text>
            <TouchableOpacity style={styles.button} onPress={this.openCamera}>
              <Text style={styles.buttonText}>ID Verification</Text>
            </TouchableOpacity>
            <Text style={styles.settingText}>Setting</Text>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.buttonText}>Tombol 2</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.buttonText}>Tombol 3</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.buttonText}>Tombol 4</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.buttonText}>Tombol 5</Text>
            </TouchableOpacity>
            <TouchableOpacity style={styles.button}>
              <Text style={styles.buttonText}>Tombol 6</Text>
            </TouchableOpacity>
          </View>
        </View>
      </View>
    );
  }
}

const { width } = Dimensions.get('window');

const styles = StyleSheet.create({
  container: {
    flex: 1,
  },
  flex1: {
    flex: 1,
  },
  flex2: {
    flex: 2,
    alignItems: 'center',
    justifyContent: 'center',
    marginTop: -200,
  },
  buttonContainer: {
    width: '100%',
    marginBottom: 20,
  },
  identityText: {
    fontSize: 15,
    fontWeight: 'bold',
    marginBottom: 10,
    marginLeft: 10,
  },
  button: {
    width: '100%',
    height: 50,
    backgroundColor: '#ffff',
    justifyContent: 'center',
    alignItems: 'center',
    marginBottom: 2,
  },
  buttonText: {
    fontSize: 16,
    color: 'black',
  },
  settingText: {
    fontSize: 15,
    fontWeight: 'bold',
    marginTop: 10,
    marginLeft: 10,
  },
});

export default Profile;
