import React from "react";
import { View, StyleSheet, SafeAreaView, Text } from "react-native";
import FontAwesome5 from "react-native-vector-icons/FontAwesome5";

const Fasilitas = () => {
	return (
		<View style={styles.container}>
			<View style={styles.header}>
				<View style={styles.headerTitle}>
					<Text style={styles.headerText}>Kampung Duren</Text>
					<FontAwesome5
						name={"shopping-cart"}
						size={20}
						color={"black"}
						style={styles.headerCart}
					/>
				</View>
			</View>
		</View>
	);
};

const styles = StyleSheet.create({
	container: {
		flex: 1,
		backgroundColor: "black",
	},

	header: {
		flex: 3,
		backgroundColor: "white",
	},

	headerTitle: {
		flexDirection: "row",
		justifyContent: "space-around",
		alignItems: "flex-start",
		borderBottomWidth: 2,
	},

	headerText: {
		marginTop: 40,
		fontSize: 30,
		fontWeight: "400",
	},

	headerCart: {
		borderWidth: 2,
		borderRadius: 100,
		padding: 10,
		marginTop: 40,
		marginBottom: 10,
	},
});

export default Fasilitas;
