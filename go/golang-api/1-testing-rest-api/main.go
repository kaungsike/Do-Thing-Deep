package main

import (
	"github.com/gin-gonic/gin"
	"net/http"
)

type Item struct {
	ID    string `json:"id"`
	Task  string `json:"task"`
	IsDone bool    `json:"is_done"`
}

var items = []Item{}

func main() {
	router := gin.Default()

	// Routes
	router.GET("/items", getItems)
	router.GET("/items/:id", getItemByID)
	router.POST("/items", createItem)

	router.Run(":8080") // localhost:8080
}

func getItems(c *gin.Context) {
	c.JSON(http.StatusOK, items)
}

func getItemByID(c *gin.Context) {
	id := c.Param("id")
	for _, item := range items {
		if item.ID == id {
			c.JSON(http.StatusOK, item)
			return
		}
	}
	c.JSON(http.StatusNotFound, gin.H{"message": "item not found"})
}

func createItem(c *gin.Context) {
	var newItem Item
	if err := c.BindJSON(&newItem); err != nil {
		c.JSON(http.StatusBadRequest, gin.H{"error": err.Error()})
		return
	}
	items = append(items, newItem)
	c.JSON(http.StatusCreated, newItem)
}
