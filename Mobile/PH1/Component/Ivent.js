import React from 'react';
import { View, StyleSheet, Image, FlatList, Text } from 'react-native';

const Ivent = () => {
  const imageList = [
    { id: 1, source: require('../assets/IVENTDUR.png'), description: 'Event Festival Durian' },
    { id: 2, source: require('../assets/120766.jpg'), description: 'Kaulinan Baheula Egrang' },
    { id: 3, source: require('../assets/116541.jpg'), description: 'gendang pencak' },
    { id: 4, source: require('../assets/Food.jpeg'), description: 'Gambar 4' },
    // Tambahkan gambar-gambar lainnya sesuai kebutuhan
  ];

  const renderImageItem = ({ item }) => (
    <View style={styles.imageContainer}>
      <View style={styles.box}>
        <Image source={item.source} style={styles.image} />
        <Text style={styles.description}>{item.description}</Text>
      </View>
    </View>
  );

  return (
    <View style={styles.container}>
      <View style={styles.header}>
        <Image
          source={require('../assets/vekalender.png')}
          resizeMode="contain"
          style={styles.smallImage}
        />
        <Text style={styles.text}>events</Text>
      </View>
      <FlatList
        data={imageList}
        renderItem={renderImageItem}
        keyExtractor={(item) => item.id.toString()}
        horizontal
        showsHorizontalScrollIndicator={false}
      />
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    marginBottom: 20,
  },
  header: {
    flexDirection: 'row',
    alignItems: 'center',
    marginBottom: 10,
  },
  text: {
    fontWeight: 'bold',
    fontSize: 20,
  },
  imageContainer: {
    alignItems: 'center',
    marginRight: 10,
  },
  box: {
    width: 200,
    height: 200,
    backgroundColor: '#f5f5f5',
    borderRadius: 10,
    padding: 10,
    justifyContent: 'center',
    alignItems: 'center',
    shadowColor: '#000000',
    shadowOffset: { width: 0, height: 2 },
    shadowOpacity: 0.3,
    shadowRadius: 4,
    elevation: 5,
  },
  image: {
    width: '100%',
    height: '100%',
    borderRadius: 10,
  },
  description: {
    marginTop: 10,
    textAlign: 'center',
  },
  smallImage: {
    width: 30,
    height: 30,
    marginLeft:30,
    marginRight:10
  },
});

export default Ivent;
